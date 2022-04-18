package tgr.controller;
 
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
 
@Controller
public class controller 
{
    //0 Home page (Slash Only Version)
    @GetMapping("/")
    public String index(Model model) 
    {
        return "index";
    }

    //1 Home Page
    @GetMapping("/home")
    public String home(Model model) 
    {
        return "index";
    }

    //2 Cart
    @GetMapping("/cart")
    public String cart(Model model) 
    {
        return "cart";
    }

    //3 Catalogue
    @GetMapping("/catalogue")
    public String catalogue(Model model) 
    {
        return "catalogue";
    }

    //4 Checkout
    @GetMapping("/checkout")
    public String checkout(Model model) 
    {
        return "checkout";
    }

    //5 Help
    @GetMapping("/help")
    public String help(Model model) 
    {
        return "help";
    }

    //6 Login (This Already Exist in LoginControllers)
    /*
    @GetMapping("/login")
    public String login(Model model) 
    {
        return "login";
    }*/

    //7 Order Status
    @GetMapping("/order_status")
    public String order_status(Model model) 
    {
        return "order_status";
    }

    //8 Payment Proof
    @GetMapping("/payment_proof")
    public String payment_proof(Model model) 
    {
        return "payment_proof";
    }

    //9 Product Info
    @GetMapping("/product_info")
    public String product_info(Model model) 
    {
        return "product_info";
    }

    //10 WIP (Change Later)
    @GetMapping("/wip")
    public String wip(Model model) 
    {
        return "wip";
    }
}
