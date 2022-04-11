package TGR.posSystem;

import org.springframework.beans.factory.annotation.*;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
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
		String sql = "SELECT * FROM ?";
         
        jdbcTemplate.update(sql, "");
	}
}
