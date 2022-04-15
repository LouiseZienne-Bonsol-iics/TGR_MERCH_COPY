package tgr.controller;
 
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
 
@Controller
public class controller 
{
    @Autowired
    private controller userService;

    
    @GetMapping("/")
    public String index(Model model) 
    {
        return "index";
    }

    @GetMapping("/home")
    public String home(Model model) 
    {
        return "index";
    }

    @GetMapping("/catalogue")
    public String catalogue(Model model) 
    {
        return "catalogue";
    }



}
