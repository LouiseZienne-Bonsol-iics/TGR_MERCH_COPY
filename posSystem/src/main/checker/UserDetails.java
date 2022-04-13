package posSystem.src.main.checker.security.WebSecurityConfig;
 
import java.util.Collection;
 
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;
 
public class CustomUserDetails implements UserDetails 
{
    private User user;
     
    public CustomUserDetails(User user) {
        this.user = user;
    }
 
    /*@Override
    public Collection<? extends GrantedAuthority> getAuthorities() {
        return null;
    }*/
 
    @Override
    public String getPassword() 
    {
        return user.getPassword();
    }
 
    @Override
    public String getUsername() 
    {
        return user.getEmail();
    }
 
    @Override
    public String getRole() 
    {
        return user.getRole;
    }
}