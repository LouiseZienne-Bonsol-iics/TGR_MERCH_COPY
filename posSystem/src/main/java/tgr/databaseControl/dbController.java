package tgr.databaseControl;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;


@Controller
@RequestMapping(value="/databaseControl")
public class dbController 
{
	@Autowired
	dbService dbService;
	
	
	 @RequestMapping(value="/list", method=RequestMethod.GET)
	 public ModelAndView list() {
		 
	  ModelAndView model = new ModelAndView("database_list");
	  List<dbControl> dbList = dbService.getAlldata();
	  model.addObject("dbList", dbList);
	
	  return model;
	 }
	 
	 
	 
	 @RequestMapping(value="/addData/", method=RequestMethod.GET)
	 public ModelAndView addData() {
		 
	  ModelAndView model = new ModelAndView();
	  dbControl dbControl = new dbControl();
	  model.addObject("dbForm", dbControl);
	  model.setViewName("db_form");
	  
	  return model;
	 }
	 
	 
	 
	 @RequestMapping(value="/editdb/{id}", method=RequestMethod.GET)
	 public ModelAndView editData(@PathVariable int id) {
	  ModelAndView model = new ModelAndView();
	  
	  dbControl dbControl = dbService.getDataById(id);
	  model.addObject("dbForm", dbControl);
	  model.setViewName("db_form");
	  
	  return model;
	 }
	 
	 
	 @RequestMapping(value="/addData", method=RequestMethod.POST)
	 public ModelAndView add(@ModelAttribute("dbForm") dbControl dbControl) {
		 
	  dbService.addData(dbControl);
	  return new ModelAndView("redirect:/databaseControl");
	  
	 }
	 
	 @RequestMapping(value="/deleteData/{id}", method=RequestMethod.GET)
	 public ModelAndView delete(@PathVariable("id") int id) {
		 
	  dbService.deleteData(id);
	  return new ModelAndView("redirect:/databaseControl");
	  
	 }
	
	
	
}