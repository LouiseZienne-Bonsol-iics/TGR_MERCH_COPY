package tgr.userAuthentication;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import tgr.userAuthentication.login;

@Repository
public interface loginRepository extends JpaRepository<login, Long>{
login findByUsernameAndPassword(String username, String password);
 
}