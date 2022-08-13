<%@ page contentType="text/html;charset=utf-8" import="java.sql.*" %><%
request.setCharacterEncoding("utf-8"); //Set encoding
out.print(request.getParameter("inputFirstName"));
String inputFirstName= request.getParameter("inputFirstName");
String inputLastName =request.getParameter("inputLastName");
String inputEmail= request.getParameter("inputEmail");
String inputPassword =request.getParameter("inputPassword");
//POST로 Input.html로부터 입력받은 내용을 변수화
out.print(inputFirstName+inputLastName+inputEmail+inputPassword);
 try{
    Class.forName("org.postgresql.Driver");
    String url = "jdbc:postgresql://localhost:5433/postgres";
    Connection con = DriverManager.getConnection(url,"postgres","tlsql12!");
    Statement stat = con.createStatement();
    String query = "INSERT INTO mocktest(inputFirstName, inputLastName, inputEmail, inputPassword) VALUES('"+inputFirstName+"','"+inputLastName+"','"+inputEmail+"','"+inputPassword+"')";

    stat.executeUpdate(query);
    stat.close();
    con.close();
}
catch(Exception e){
out.println( e );
}
response.sendRedirect("layout-static.jsp");
%>

출처: https://sosal.kr/636 [so_sal　:티스토리]