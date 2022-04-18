package tgr.databaseControl;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

@Repository
public class dbRepository
{
    @Autowired
    private JdbcTemplate jdbcTemplate;

    @Transactional(readOnly = true)
    public List<dbControl> getData()
    {

        //List<dbControl> query = jdbcTemplate.query("SELECT * FROM Orders", new dbRowMapper());
        //System.out.println("AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH: " + query);
        //return query;//dbcTemplate.query("SELECT * FROM orders", new dbRowMapper());
        return jdbcTemplate.query("select * from Orders", new dbRowMapper());
        
    }
}