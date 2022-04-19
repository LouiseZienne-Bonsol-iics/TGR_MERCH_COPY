// package tgr.databaseControl;

// import java.util.ArrayList;
// import java.util.List;
// import java.util.Random;

// import org.springframework.beans.factory.annotation.Autowired;
// import org.springframework.boot.SpringApplication;
// import org.springframework.boot.autoconfigure.SpringBootApplication;
// import org.springframework.context.ApplicationContext;
// import org.springframework.stereotype.Controller;
// import org.springframework.web.bind.annotation.RequestBody;
// import org.springframework.web.bind.annotation.RequestMapping;
// import org.springframework.web.bind.annotation.RequestMethod;
// import org.springframework.web.servlet.ModelAndView;


// @Controller
// public class dbController 
// {
// 	@Autowired
// 	dbService dbS;
// 	@RequestMapping(value="/dbControl", method=RequestMethod.GET)
// 	public ModelAndView getData(@RequestBody dbService requestBody) 
//     {

// 	    ModelAndView model = new ModelAndView();
// 	    dbService dbS = context.getBean(dbService.class);
//         model.setViewName("databaseControl");
//         System.out.println("AAAAAAAAAAAAAAAAAAAAHHHHHHHHHHHHHHHHHHHHHHHHHHH: " + dbList);
// 	    model.addObject("dbList", dbList);
	
// 	    return model;
// 	}
	 
// }