@WebServlet(urlPatterns = {"/NewServlet"})
import java.security.Security;
import java.util.*;
import javax.mail.*;
import javax.mail.internet.*;
import javax.mail.internet.MimeMessage;
import javax.swing.*;
import java.util.Properties;
public class NewServlet extends HttpServlet {
  protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException,MessagingException {
        response.setContentType("text/html;charset=UTF-8");
        String email = request.getParameter("email");
        try (PrintWriter out = response.getWriter()) {
         String host = "smtp.gmail.com";
        String user = "ashweenr1998@gmail.com";
        String pass = "nishan1093";
        String to = email;
        String from = user;
        String Subject = "Auto Generator";
        String message = "Hi this is a test mail :)";

        Properties pros = System.getProperties();
        pros.put("mail.smtp.starttls.enable", "true");
        pros.put("mail.smtp.host","host");
        pros.put("mail.smtp.auth", "true");
        pros.put("mail.smtp.port", "587");
        pros.put("mail.smtp.starttls.required", "true");
        Security.addProvider(Security.getProvider("SunJSSE"));
        Session mailSession = Session.getDefaultInstance(pros,null);
        mailSession.getDebugOut();
        Message msg = new MimeMessage(mailSession);
        msg.setFrom(new InternetAddress(from));
        InternetAddress [] address = {new InternetAddress(to)};
        msg.setRecipients(Message.RecipientType.TO,address);
        msg.setSubject(Subject);
        msg.setSentDate(new Date());
        msg.setText(message);
        Transport transport = mailSession.getTransport("smtp");
        transport.connect(host,user,pass);
        transport.sendMessage(msg,msg.getAllRecipients());
        transport.close();
        JOptionPane.showMessageDialog(null,"message sent");   
        }
    }
}