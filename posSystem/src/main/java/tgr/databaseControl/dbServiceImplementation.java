// package tgr.databaseControl;

// import java.util.List;

// import org.springframework.beans.factory.annotation.Autowired;
// import org.springframework.stereotype.Service;

// @Service
// public class dbServiceImplementation implements dbService{

//     @Autowired
//     private dbDao dbDao;

//     @Override
//     public void insertData(dbControl dbControl) 
//     {
//         dbDao.insertData(dbControl);
//     }

//     @Override
//     public void insertDatas(List<dbControl> dbControls)
//     {
//         dbDao.insertDatas(dbControls);
//     }

//     public void getAllData()
//     {
//         List<dbControl> dbControls = dbDao.getAllData();
//         for (dbControl dbControl : dbControls)
//         {
//             System.out.println(dbControl.toString());
//         }
//     }

// }
