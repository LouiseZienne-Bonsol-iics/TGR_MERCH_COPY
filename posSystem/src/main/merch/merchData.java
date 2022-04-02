import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.annotation.WebServlet;

public class merchData 
{
     //StringBuffer
     private static StringBuffer url;
    
     //Username and Password for Database Connection
     private static String userDB;
     private static String passDB;
     
     
     @Override
     public void init(ServletConfig config) throws ServletException 
     {
         super.init(config);
 
         try
         {
             Class.forName(com.mysql.jdbc.Driver); //config.getInitParameter("driver")); //Driver = "org.apache.derby.jdbc.ClientDriver";
 
             userDB = "root"; //config.getInitParameter("userDB");
             passDB = "root"; //config.getInitParameter("passDB");

             url = "jdbc:mysql://localhost:3306/tgr_merch";
             
             /*url = new StringBuffer(config.getInitParameter("jdbcDriverURL"))
                     .append("://")
                     .append(config.getInitParameter("host"))
                     .append(":")
                     .append(config.getInitParameter("port"))
                     .append("/")
                     .append(config.getInitParameter("DBName"));*/
             
             /*
             driver = "org.apache.derby.jdbc.ClientDriver";
 
             //URL, Username and Password
             URL = "jdbc:derby://localhost:1527/UserDB";
 
                 URL
                 Driver:     jdbc:derby      ://
                 HostName:   localhost       : 
                 Port:       3306            / 
                 Database:   UserDB          
             */
         }

         catch (ClassNotFoundException e) //| SQLException e) 
         {
             e.printStackTrace();
         }    
    }


    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException 
    {
        //None here
    }


    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        //None here
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException
    {
        //User Input
        //String placeholder = request.getParameter("username").trim();
        //String username = placeholder.toLowerCase();
        //String password = request.getParameter("password");
        
        //Database Records
        //String usernameDB = null;
        //String passwordDB = null;
        //String role = null;

        int ID = null;
        String merchName = null;
        double merchPrice = null;

        
        try
        {
            Connection con = DriverManager.getConnection(url.toString(), userDB, passDB);
            
            //String query = "SELECT * FROM USER_INFO WHERE username = ?";
            String query = "SELECT * FROM merchandise";
            PreparedStatement pStmt = con.prepareStatement(query);
            //pStmt.setString(1, username);

            ResultSet rs = pStmt.executeQuery();

            //Gets all the Records
            while(rs.next())
            {
                System.out.println(rs.getString("ID"));
                System.out.println("merchName");
                System.out.println("merchPrice");

                //usernameDB = rs.getString("Username").trim(); 
                //passwordDB = rs.getString("Password"); 
                //role = rs.getString("role").trim();
            }

            
            //First Key
            //Security.key(key_2);
            //passwordDB = Security.decrypt(passwordDB);
            
            //Second Key
            //Security.key(key_1);
            //passwordDB = Security.decrypt(passwordDB);
            
            
            //Set key to null
            //Security.key("");
            

            /*
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

            }*/

            
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
