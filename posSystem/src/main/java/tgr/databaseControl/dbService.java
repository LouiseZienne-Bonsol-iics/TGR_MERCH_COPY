package tgr.databaseControl;

import java.util.List;


public interface dbService {
    public List<dbControl> getAlldata();
	 
    public dbControl getDataById(int id);
    
    public void addData(dbControl dbControl);
    
    public void deleteData(int id);
}