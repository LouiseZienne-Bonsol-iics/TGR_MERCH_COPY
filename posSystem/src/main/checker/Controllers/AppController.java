package TGR.posSystem;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
 
@Controller
public class AppController 
{
 
    @Autowired
    private UserRepository userRepo;
     
    /*@GetMapping("")
    public String viewHomePage() 
    {
        return "index";
    }*/

    @GetMapping("/login")
    public String login() 
    {
        return "login";
    }

    /*@GetMapping("/users")
    public String listUsers(Model model) 
    {
        List<User> listUsers = userRepo.findAll();
        model.addAttribute("listUsers", listUsers);
        
        return "users";
    }*/

}