package checker;

//Context Listener
import ContextListeners.*;

// Errors
import Errors.*;

import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.annotation.WebServlet;

//Security
import encryption.*;

/**
 *
 * @author Aki
 */
@WebServlet(name = "ServletChecker", urlPatterns = {"/ServletChecker"})
public class checkerLogin extends HttpServlet
{
    //StringBuffer
    private static StringBuffer url;
    
    //Username and Password for Database Connection
    private static String userDB;
    private static String passDB;
    
    private static String key_1;
    private static String key_2;
    
    @Override
    public void init(ServletConfig config) throws ServletException 
    {
        super.init(config);

        try
        {
            Class.forName(config.getInitParameter("driver")); //Driver = "org.apache.derby.jdbc.ClientDriver";

            userDB = config.getInitParameter("userDB");
            passDB = config.getInitParameter("passDB");
            
            url = new StringBuffer(config.getInitParameter("jdbcDriverURL"))
                    .append("://")
                    .append(config.getInitParameter("host"))
                    .append(":")
                    .append(config.getInitParameter("port"))
                    .append("/")
                    .append(config.getInitParameter("DBName"));
            
            /*
            driver = "org.apache.derby.jdbc.ClientDriver";

            //URL, Username and Password
            URL = "jdbc:derby://localhost:1527/UserDB";

                URL
                Driver:     jdbc:derby      ://
                HostName:   localhost       : 
                Port:       1527            / 
                Database:   UserDB          
            */

                     
        } 
        catch (ClassNotFoundException e) //| SQLException e) 
        {
            e.printStackTrace();
        } 
        
        key_1 = config.getInitParameter("key_1");
        key_2 = config.getInitParameter("key_2");

    }

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException 
    {
        //None here
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        //None here
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        //User Input
        String placeholder = request.getParameter("username").trim();
        String username = placeholder.toLowerCase();
        String password = request.getParameter("password");
        
        //Database Records
        String usernameDB = null;
        String passwordDB = null;
        String role = null;
        
        try
        {
            Connection con = DriverManager.getConnection(url.toString(), userDB, passDB);
            
            String query = "SELECT * FROM USER_INFO WHERE username = ?";
            PreparedStatement pStmt = con.prepareStatement(query);
            pStmt.setString(1, username);

            ResultSet rs = pStmt.executeQuery();

            while(rs.next())
            {
                usernameDB = rs.getString("Username").trim(); 
                passwordDB = rs.getString("Password"); 
                role = rs.getString("role").trim();
            }
            
            //First Key
            Security.key(key_2);
            passwordDB = Security.decrypt(passwordDB);
            
            //Second Key
            Security.key(key_1);
            passwordDB = Security.decrypt(passwordDB);
            
            
            //Set key to null
            Security.key("");
            


            if(username.isEmpty() && password.isEmpty())
            {
                throw new NullValueException();
            }

            else if(username.trim().equals(usernameDB))
            {
                if(password.equals(passwordDB))
                {     
                    User user = new User();
                    user.setUser(placeholder, passwordDB, role);

                    ServletContext sc = getServletContext();
                    sc.setAttribute("userCon", user);

                    //Session
                    HttpSession session = request.getSession();
                    session.setAttribute("userSes", username);
                    session.setAttribute("passSes", password);
                    session.setAttribute("RoleSes", role);

                    //ServletContextListener Code
                    UserContextListener UseConList = new UserContextListener();
                    UseConList.contextInitialized(new ServletContextEvent(sc));

                    //Redirect
                    switch(role)
                    {
                        case "Admin": response.sendRedirect("successAdmin"); break;
                        default: response.sendRedirect("success");
                    }

                }

                else
                {
                    //Error 2 (Wrong Password)
                    throw new AuthenticationException_2();
                } 

            }

            else 
            {
                if(password.isEmpty())
                {
                    //Error 1 (Not in Database)
                    throw new AuthenticationException_1();
                }

                else
                {
                    //Error 3 (Wrong Username and Password)
                    throw new AuthenticationException_3();
                }
            }     
            
            rs.close();
            pStmt.close();
            con.close();   
        }
        catch (SQLException e)
        {
            e.printStackTrace();
        }     
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
}
