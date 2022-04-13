package TGR.posSystem;
 
import org.springframework.data.jpa.repository.JpaRepository;
 
//The Query
public interface UserRepository extends JpaRepository<User, Long> 
{
    @Query("SELECT u FROM User u WHERE u.email = ?1")
    public User findByEmail(String email);
}