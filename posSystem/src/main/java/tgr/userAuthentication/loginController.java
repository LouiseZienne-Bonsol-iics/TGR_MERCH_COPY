package tgr.userAuthentication;
 
import java.util.Objects;
 
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
 
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
 
@Controller
public class loginController 
{
    @Autowired
    private loginService userService;

    /*
    @GetMapping("/")
    public String index(Model model) 
    {
        return "index";
    }*/
 
                                  
    @GetMapping("/login")
    public String login(Model model) 
    {
        model.addAttribute("login", new login());
        return "login";
    }
 
    @PostMapping("/login")
    //public String login(@ModelAttribute("user") login user ) {
    public String login(@ModelAttribute login login, Model model)
    {
        login oauthUser = userService.login(login.getUsername(), login.getPassword());
        
    
        System.out.print(oauthUser);
        if(Objects.nonNull(oauthUser))
        {
            return "redirect:/";
        } 
        else 
        {
            return "redirect:/login";
        }
 
    }
    
    @RequestMapping(value = {"/logout"}, method = RequestMethod.POST)
    public String logoutDo(HttpServletRequest request,HttpServletResponse response)
    {
        return "redirect:/login";
    }
 
}