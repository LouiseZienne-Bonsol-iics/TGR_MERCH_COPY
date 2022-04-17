package tgr.databaseControl;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

@Repository
public class dbRepository{
    @Autowired
    private JdbcTemplate jdbcTemplate;

    @Transactional(readOnly = true)
    public List<dbControl> getData()
    {
        return jdbcTemplate.query("SELECT * FROM orders", new dbRowMapper());
    }
}