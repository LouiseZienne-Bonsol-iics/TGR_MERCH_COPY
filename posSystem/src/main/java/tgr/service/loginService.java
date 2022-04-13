package tgr.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
 
import tgr.domain.login;
import tgr.repository.loginRepository;
 
 
 
@Service
public class loginService {
@Autowired
private loginRepository repo;
  
  public login login(String username, String password) {
  login user = repo.findByUsernameAndPassword(username, password);
   return user;
  }
 
}