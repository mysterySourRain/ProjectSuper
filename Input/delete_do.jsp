<%@ page contentType="text/html;charset=utf-8" import="java.sql.*" %><%
request.setCharacterEncoding("utf-8");
String inputPassword = request.getParameter("del");try{
Class.forName("org.postgresql.Driver");
String url = "jdbc:postgresql://localhost:5433/postgres";
Connection con = DriverManager.getConnection(url,"postgres","tlsql12!");
Statement stat = con.createStatement(); 
String query = "DELETE FROM mocktest where inputPassword='" + request.getParameter("del")+"'";
 //쿼리문 전송
stat.executeUpdate(query); //return 1.
stat.close();
con.close();
response.sendRedirect("output.jsp") ;
}

catch(Exception e){
out.println( e );
}
%>
출처: https://sosal.kr/636 [so_sal　:티스토리]