<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.* " %>
<%@ page import="java.io.*" %>
<%

try {
    String driver = "org.postgresql.Driver";
    String url = "jdbc:postgresql://localhost:5433/postgres";
    String username = "postgres";
    String password = "tlsql12!";
    String myDataField = null;
    String myQuery = "select * from kshinbee";
    Connection myConnection = null;
    PreparedStatement myPreparedStatement = null;
    ResultSet myResultSet = null;
    Class.forName(driver).newInstance();
    myConnection = DriverManager.getConnection(url,username,password);
    System.out.println("Opened database successfully");
    myPreparedStatement = myConnection.prepareStatement(myQuery);
    ResultSet rs = myPreparedStatement.executeQuery();

    ResultSetMetaData rsmd = rs.getMetaData();
    int  totalColumn = rsmd.getColumnCount();


    out.println("<table border='1' style='border-collapse:collapse'>");
    out.println("<tr>");

    for(int i=1;i<=totalColumn;i++)
    {
        String columnName = rsmd.getColumnName(i);
        out.println("<th>"+columnName+"</th>");
    }
    out.println("</tr>");

    while(rs.next())
    {    
        out.println("<tr>");
        for(int col=1;col<=totalColumn;col++)
        {            
            Object obj= rs.getObject(col);                    
            out.println("<td>"+ String.valueOf(obj) +"</td>");
        } 
        out.println("</tr>");
    }
    out.println("</table>");

}
catch(ClassNotFoundException e){
    e.printStackTrace();
}
catch (SQLException ex) {
    out.print("SQLException: "+ex.getMessage());
    out.print("SQLState: " + ex.getSQLState());
    out.print("VendorError: " + ex.getErrorCode());
}
%>
