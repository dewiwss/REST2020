package RESTfulHelloWorld;

import java.util.Set;
import javax.ws.rs.core.Application;

@javax.ws.rs.ApplicationPath("hello")
public class Hello extends Application {
	
	@Override
	public Set<Class<?>> getClasses() {
		Set<Class<?>> resources = new java.util.HashSet<>();
		addRestResourceClasses(resources);
		return resources;
	}
	
	private void addRestResourceClasses(Set<Class<?>> resources) {
		resources.add(RESTfulHelloWorld.HelloWorld.class);
	}
}