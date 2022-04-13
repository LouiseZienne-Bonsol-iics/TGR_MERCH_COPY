@EnableWebMvc
@Configuration
@ComponentScan("posSystem.src.main.route")
public class WebConfig implements WebMvcConfigurer 
{
    // All web configuration will go here
    @Bean
    public ViewResolver internalResourceViewResolver() 
    {
        InternalResourceViewResolver bean = new InternalResourceViewResolver();
        bean.setViewClass(JstlView.class);
        bean.setPrefix("/resources/templates/");
        bean.setSuffix(".jsp");
        return bean;
    }

    @Bean
    public BeanNameViewResolver beanNameViewResolver()
    {
        return new BeanNameViewResolver();
    }

    @Bean
    public View sample() 
    {
        return new JstlView("/resources/templates/login.jsp");  // /WEB-INF/view/sample.jsp");
    }
}