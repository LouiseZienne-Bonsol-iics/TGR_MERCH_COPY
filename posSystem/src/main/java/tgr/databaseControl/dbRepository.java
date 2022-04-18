package tgr.databaseControl;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.jdbc.core.BeanPropertyRowMapper;
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
		//String sql = "SELECT * FROM ORDERS";
         
        //List<tgr_merch> listtgr_merch = jdbcTemplate.query(sql, BeanPropertyRowMapper.newInstance(tgr_merch.class));
        /*List<order> listorder = jdbcTemplate.query(sql, BeanPropertyRowMapper.newInstance(order.class));

		for (order merch : listorder)
		{
			System.out.println(merch);
		}*/



        List<dbControl> query = jdbcTemplate.query("SELECT * FROM Orders", BeanPropertyRowMapper.newInstance(dbControl.class));//new dbRowMapper());
        System.out.println("AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH: " + query);
        return query; //dbcTemplate.query("SELECT * FROM orders", new dbRowMapper());
        
    }
}