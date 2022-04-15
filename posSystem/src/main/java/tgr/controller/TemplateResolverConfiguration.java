/*package tgr.controller;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;
import org.thymeleaf.spring5.templateresolver.SpringResourceTemplateResolver;
import org.thymeleaf.templatemode.TemplateMode;
import org.thymeleaf.templateresolver.ClassLoaderTemplateResolver;

@Configuration
public class TemplateResolverConfiguration implements WebMvcConfigurer
{

    @Bean
    public ClassLoaderTemplateResolver firstTemplateResolver() 
    {
        ClassLoaderTemplateResolver TemplateResolver = new ClassLoaderTemplateResolver();
        TemplateResolver.setPrefix("/TGR_merch/");
        TemplateResolver.setSuffix(".html");
        TemplateResolver.setTemplateMode(TemplateMode.HTML);
        TemplateResolver.setCharacterEncoding("UTF-8");
        TemplateResolver.setOrder(0);
        TemplateResolver.setCheckExistence(true);
            
        return TemplateResolver;
    }

    @Bean
    public ClassLoaderTemplateResolver secondTemplateResolver() 
    {
        ClassLoaderTemplateResolver TemplateResolver = new ClassLoaderTemplateResolver();
        TemplateResolver.setPrefix("/TGR_merch/pages/");
        TemplateResolver.setSuffix(".html");
        TemplateResolver.setTemplateMode(TemplateMode.HTML);
        TemplateResolver.setCharacterEncoding("UTF-8");
        TemplateResolver.setOrder(1);
        TemplateResolver.setCheckExistence(true);

        return TemplateResolver;
    }
    
}*/