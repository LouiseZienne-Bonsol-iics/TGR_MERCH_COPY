package tgr.databaseControl;
import java.util.List;

public interface dbDao
{
    void insertData(dbControl db);
    void insertDatas(List<dbControl> dbControls);
    List<dbControl> getAllData();
}