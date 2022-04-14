package tgr.userAuthentication;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
 
import tgr.userAuthentication.login;
import tgr.userAuthentication.loginRepository;
 
 
 
@Service
public class loginService {
@Autowired
private loginRepository repo;
  
  public login login(String username, String password) {
  login login = repo.findByUsernameAndPassword(username, password);
   return login;
  }
 
}