package posSystem.src.main.checker.security.WebSecurityConfig;
 
import org.springframework.data.jpa.repository.JpaRepository;
 
public interface UserRepository extends JpaRepository<User, Long> {
 
}