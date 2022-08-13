<%@ page contentType="text/html;charset=utf-8" import="java.sql.*" %>
<% response.setContentType("text/html;charset=utf-8;");
 request.setCharacterEncoding("utf-8");
 Class.forName("org.postgresql.Driver"); 
 String DB_URL = "jdbc:postgresql://localhost:5433/postgres";
 String DB_USER = "postgres";
 String DB_PASSWORD= "tlsql12!"; 
 Connection conn= null;
 Statement stmt = null;
 ResultSet rs = null;

 try {
  conn = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);
stmt = conn.createStatement();

 String query = "SELECT inputFirstName, inputLastName, inputEmail, inputPassword FROM mocktest";
  rs = stmt.executeQuery(query);
%>

<form action="delete_do.jsp" method="post">
<table border="1" cellspacing="0">
<tr>
<td>ID</td>
<td>Name</td>
<td>password</td>
<td>email</td>
<th>비고</th>
</tr>
<%
 while(rs.next()) { 
%><tr>
<td><%=rs.getString("inputFirstName")%></td>
<td><%=rs.getString("inputLastName")%></td>
<td><%=rs.getString("inputEmail")%></td>
<td><%=rs.getString(4)%></td>
<td><a href="delete_do.jsp?del=<%=rs.getString(4)%>">delete</a>
</td>
</tr>
<%
 }
%></table>
</form>
<button><a href="register_edited.html">register.html</a>
<%
rs.close();
 stmt.close(); 
 conn.close();  
}
catch (SQLException e) {
 out.println("err:"+e.toString());
} 
%>
