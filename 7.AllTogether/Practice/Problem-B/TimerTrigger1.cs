using System;
using System.Data.SqlClient;

public static void Run(TimerInfo myTimer, ILogger log)
{
    string constr = "Server=tcp:vnsolsqlsrv.database.windows.net,1433,1433;Initial Catalog=vnsolsqldb;Persist Security Info=False;User ID=demouserdb;Password=DemoPasswordDB-2021;MultipleActiveResultSets=False;Encrypt=True;TrustServerCertificate=False;Connection Timeout=30;";
    string sqltext;

    log.LogInformation($"C# Timer trigger function executed at: {DateTime.Now}");
    //
    using (SqlConnection conn = new SqlConnection(constr))
    {
        conn.Open();

        // Insert a row
        sqltext = "INSERT INTO SubmittedItems (SubmittedName) VALUES ('TIMER')";

        using (SqlCommand cmd = new SqlCommand(sqltext, conn))
        {
            cmd.ExecuteNonQuery();
        }

    }
}
