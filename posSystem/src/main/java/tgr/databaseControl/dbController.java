package tgr.databaseControl;
 
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

public class dbController {
    @Autowired
    private dbRepository dbRepo;

    @GetMapping("/databaseControl")
    public String databaseControl(Model model) 
    {
        List<dbControl> databaseControl = dbRepo.findAll();
        model.addAttribute("databaseControl", databaseControl);
        return "databaseControl";
    }
 
}
