package TGR.posSystem;

import java.util.List;

import org.springframework.beans.factory.annotation.*;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.jdbc.core.BeanPropertyRowMapper;
import org.springframework.jdbc.core.JdbcTemplate;

@SpringBootApplication
public class PosSystemApplication implements CommandLineRunner{

	private JdbcTemplate jdbcTemplate;
	@Autowired
	public static void main(String[] args) {
		SpringApplication.run(PosSystemApplication.class, args);
	}
	@Override
	public void run(String... args) throws Exception 
	{
		String sql = "SELECT * FROM tgr_merch";
         
        List<tgr_merch> listtgr_merch = jdbcTemplate.query(sql, BeanPropertyRowMapper.newInstance(tgr_merch.class));

		for (tgr_merch merch : listtgr_merch)
		{
			System.out.println(merch);
		}
	}
}
