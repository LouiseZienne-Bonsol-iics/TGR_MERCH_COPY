package Servlet;

import Encryption.Security;
import Exceptions.NullValueException;
import Exceptions.UserAlreadyExists;
import Exceptions.PassNotMatch;
import java.io.*;
import java.sql.*;
import java.util.logging.*;
import javax.servlet.*;
import javax.servlet.http.*;
import nl.captcha.Captcha;
import static nl.captcha.Captcha.NAME;
import Encryption.*;

/**
 *
 * @author nono
 */
public class SignUp extends HttpServlet {

    String driver,dburl,dbuser,dbpass;
    private static String key;
    
    
    public void init(ServletConfig config) throws ServletException {
        super.init(config);
        driver = "org.apache.derby.jdbc.ClientDriver";
        dburl = "jdbc:derby://localhost:1527/TigerDB";
        dbuser = "app";
        dbpass = "app";
        
        key = config.getInitParameter("Key");
    }

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet SignUpServlet</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet SignUpServlet at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
    }




    
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        String un = request.getParameter("username").trim();
        Security.key(key);
        String p = request.getParameter("password");
        String p2 = request.getParameter("confirmPassword");
        String guest = "guest";
        
        if (un.isEmpty() && p.isEmpty()) { 
            throw new NullValueException();
        }

        try {
            Class.forName(driver);
            Connection connection = DriverManager.getConnection(dburl, dbuser, dbpass);
            PreparedStatement ps = connection.prepareStatement("SELECT * FROM MEMBER_INFO");
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                if (un.equals(rs.getString("USERNAME"))) {
                    System.out.println("Username Already Signed Up!");
                    throw new UserAlreadyExists();
                }
            }
            rs.close();
            ps.close();
            if (p.equals(p2)) {
                p = Security.encrypt(p);
                String answer = request.getParameter("captchaAnswer");

                Captcha captcha = (Captcha) request.getSession().getAttribute(NAME);

                if (captcha.isCorrect(answer)) {
                    System.out.println("Password Matches");
                    PreparedStatement insert = connection.prepareStatement("INSERT into USER_INFO( USERNAME, PASSWORD, ROLE ) VALUES (?, ?, ?)");
                    insert.setString(1, un);
                    insert.setString(2, p);
                    insert.setString(3, guest);
                    insert.executeUpdate();
                    System.out.println("Successful Signup");
                    response.sendRedirect("SignUpSuccess.jsp");
                } else {
                    response.sendRedirect("captchaError.jsp");
                }
            } else if (!p.equals(p2)) {
                System.out.println("Password Does Not Match");
                throw new PassNotMatch();
            }

        } catch (SQLException | NullPointerException | ClassNotFoundException e) {
            System.out.println("SQLException error occured - " + e.getMessage());
        }
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

} 