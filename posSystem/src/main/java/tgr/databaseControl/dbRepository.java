package tgr.databaseControl;

import org.springframework.data.repository.CrudRepository;

public interface dbRepository extends CrudRepository<dbControl, Integer> {
    //dbControl findData(String OrderID, String LastName);
}