package ws;

import javax.ws.rs.*;
import javax.ws.rs.core.*;

@Path("demo")
public class Rest {

	@GET
	@Path("hello")
	@Produces(MediaType.TEXT_PLAIN)
	public String hello() {
		return "Hasil Operasi Perhitungan";
	}
	
	@GET
	@Path("tambah/{a}/{b}")
	@Produces(MediaType.TEXT_PLAIN)
	public String tambah(@PathParam("a")int a, @PathParam("b")int b) {
		return String.valueOf(a + b);
	}
	
	@GET
	@Path("kurang/{a}/{b}")
	@Produces(MediaType.TEXT_PLAIN)
	public String kurang(@PathParam("a")int a, @PathParam("b")int b) {
		return String.valueOf(a - b);
	}
	
	@GET
	@Path("bagi/{a}/{b}")
	@Produces(MediaType.TEXT_PLAIN)
	public String bagi(@PathParam("a")double a, @PathParam("b")double b) {
		return String.valueOf(a / b);
	}
	
	@GET
	@Path("kali/{a}/{b}")
	@Produces(MediaType.TEXT_PLAIN)
	public String kali(@PathParam("a")int a, @PathParam("b")int b) {
		return String.valueOf(a * b);
	}
}
