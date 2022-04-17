package tgr.databaseControl;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface dbRepository extends JpaRepository<dbControl, Long> {
    dbControl findData(String OrderID, String LastName);
}