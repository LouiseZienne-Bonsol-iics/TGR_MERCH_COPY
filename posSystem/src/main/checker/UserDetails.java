package TGR.posSystem;
 
import java.util.Collection;
 
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;
 

//Setters and Getters
public class UserDetails implements UserDetails 
{
    private User user;
     
    public UserDetails(User user) {
        this.user = user;
    }
 
    /*@Override
    public Collection<? extends GrantedAuthority> getAuthorities() {
        return null;
    }*/

    @Override
    public String getUsername() 
    {
        return user.getEmail();
    }
 
    @Override
    public String getPassword() 
    {
        return user.getPassword();
    }
 
    @Override
    public String getRole() 
    {
        return user.getRole;
    }
}