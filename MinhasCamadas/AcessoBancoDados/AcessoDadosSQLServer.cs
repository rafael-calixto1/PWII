using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

//importar bibliotecas de Banco de Dados
using System.Data;
using System.Data.SqlClient;
using AcessoBancoDados.Properties;  //criada por mim, o '.Proprietis


namespace AcessoBancoDados
{
    public class AcessoDadosSQLServer
    {
        //Criar conexao com bnaco de dados
        private SqlConnection sqlConnection() {
            return new SqlConnection(Settings.Default.StringConnection); //string connection foi criado no 
        }

        //PArametros para o BD
        private SqlParameterCollection SqlParameterCollection = new SqlCommand().Parameters;

        public void LimparParametros()
        {
            SqlParameterCollection.Clear();
        }

        public void AdicionarParametross(string nomeParametro, object valorParametro)
        {
            SqlParameterCollection.Add(new SqlParameter(nomeParametro, valorParametro));

            //preencher is dados do SQLComand -  Manipulacao
            private SqlCommand PreenchersqlCommand(ComandType comandType, string MinhaISP)
            {
                try
                {
                    //criar e abrir a conexao com o BD
                    SqlConnection sqlConnection = CriarConexao();
                    sqlConnection.Open();
                    //Complementar os comandos da SQLComand 
                    SqlCommand sqlCommand = sqlConnection.CreateCommand();
                    sqlCommand.CommandType = comandType;
                    sqlCommand.CommandText = MinhaISP;
                    //definir tempo de execucao desses comandos em segundos (timeOut)
                    sqlCommand.CommandTimeout = 3600;
                    //Adicionar os parametros dentro da SQLComand
                    foreach (SqlParameter item in SqlParameterCollection)
                    {
                        sqlCommand.Parameters.Add(new SqlParameter(item.ParameterName, item.Value));

                        return sqlCommand;
                    }
                        
                }
                catch (Exception ex)
                {
                    //disparar um novo evento de exeção para ser utilizada na camada superior
                    //O formato de saida é doferente
                    throw new Exception(ex.Message);
                }
            }
                
        }
        //Definir, alterar e excluir
        public object ManipulaDados(ComandType comandType, string minhaISP)
        {
            try
            {
                SqlComand sqlComand = new SqlComand();
                //chamando funcao que preenche a linha de comando
                sqlComand = PreencherSqlComand(comandType, minhaISP);
                //executar o comando e pegar o retorno do BD
                return sqlComand.ExecuteSclar();
            }
            catch (Exception ex)
                {
                    throw new Exception(ex.Message);
                }
        }
        public DataTable ExecutaConsulta(ComandType comandType, string minhaISP)
        {
            try
            {
                //cria e chama a funcao que preenche a sqlcomand
                SqlCommand sqlCommand = PreencherSqlComand(comandType, minhaISP);
                SqlDataAdapter sqlDataAdapter = new SqlDataAdapter(sqlComand);
                //Criar uma tabela vazia
                DataTable dt = new DataTable();
                sqlDataAdapter.Fill(dt); //dt = dataTable

                //Retorno da Stored Procedure
                return dt;
            }
            catch (Exception ex)
            {

                throw new Exception(ex.Message);
            }
        }
    }
}
