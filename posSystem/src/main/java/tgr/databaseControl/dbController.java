package tgr.databaseControl;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;


@Controller
public class dbController 
{
	@Autowired
	private dbService dbService;
	
	@RequestMapping(value="/dbControl", method=RequestMethod.GET)
	public ModelAndView getData() 
    {
	    ModelAndView model = new ModelAndView();
	    List<dbControl> dbList = dbService.getData();
        model.setViewName("databaseControl");
        System.out.println("AAAAAAAAAAAAAAAAAAAAHHHHHHHHHHHHHHHHHHHHHHHHHHH: " + dbList);
	    model.addObject("dbList", dbList);
	
	    return model;
	}
	 
}