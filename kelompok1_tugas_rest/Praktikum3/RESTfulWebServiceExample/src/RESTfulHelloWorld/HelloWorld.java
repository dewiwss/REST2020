package RESTfulHelloWorld;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

	@Path("welcome")
	public class HelloWorld {
		@GET
		@Produces(MediaType.TEXT_PLAIN)
		public String getWelcomeNote() {
			return "Congrats, you created first RESTful web service";
	}
}
