package service;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
 
import domain.login;
import repository.loginRepository;
 
 
 
@Service
public class loginService {
@Autowired
private loginRepository repo;
  
  public login login(String username, String password) {
  login user = repo.findByUsernameAndPassword(username, password);
   return user;
  }
 
}