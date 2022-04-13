package tgr;


import java.util.List;

import org.springframework.beans.factory.annotation.*;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.jdbc.core.BeanPropertyRowMapper;
import org.springframework.jdbc.core.JdbcTemplate;

//import order;


@SpringBootApplication
public class PosSystemApplication implements CommandLineRunner{
	@Autowired
	JdbcTemplate jdbcTemplate;
	public static void main(String[] args) {
		SpringApplication.run(PosSystemApplication.class, args);
	}
	@Override
	public void run(String... args) throws Exception 
	{
		String sql = "SELECT * FROM ORDERS";
         
        List<order> listorder = jdbcTemplate.query(sql, BeanPropertyRowMapper.newInstance(order.class));

		for (order merch : listorder)
		{
			System.out.println(merch);
		}
	}
}
