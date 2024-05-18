JavaScript

// Example using AJAX to get data from a PHP endpoint//
fetch('get_data.php')
    .then(response => response.json())
    .then(data => {
        // Update your page with the data received from the PHP endpoint
        console.log(data);
    });
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;
import java.io.PrintWriter;

public class MyServlet extends HttpServlet {
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/plain");
        PrintWriter out = response.getWriter();
        out.println("Data from Java Servlet");
    }
}
