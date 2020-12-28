<?php
class data {
    public function connection(){
        $user="root";
		$pass="";
		$db="mvc";
		$server="localhost";
		$this->conn = mysqli_connect($server,$user,$pass,$db);
		if(mysqli_connect_error()){
			die("Erro ao conectar:".mysqli_connect_error());
		}   

    }

    public function insert($dados){
        $nome = $dados['nome'];
        $idade = $dados['idade'];

        $sql = "INSERT INTO users (nome, idade) VALUES ('$nome', '$idade')";
        $query = mysqli_query($this->conn,$sql);
        if($query){
            return true;
        }
        else
            return false;
        
    }

    public function listDados(){
        $sql = "SELECT * FROM users";
		$query = mysqli_query($this->conn,$sql);
 	 	while($res = $query->fetch_assoc()){
			echo "<tr>";
			echo '<td>'.$res['nome'].'</td>';
			echo '<td>'.$res['idade'].'</td>';
			echo "<td><a href='Views/FormUpdate.php?id={$res['id']}'><button type='button' class='btn btn-outline-primary'>Editar</button></a></td>";
			echo "<td><a href='Controllers/UserController.php?opc=delete&id={$res['id']}' onclick=\"return confirm('Tem certeza que deseja deletar este registro?')\"><button type='button' class='btn btn-outline-danger'>Excluir</button></a></td>";
			echo "</tr>";
	 	}
        
    }

    public function update($dados){
        $id = $dados['id'];
        $nome = $dados['nome'];
        $idade = $dados['idade'];

        $sql = "UPDATE users SET nome='$nome', idade='$idade' WHERE id='$id'"; 
        $query = mysqli_query($this->conn,$sql);
		if($query)
			return true;
		else
			return false;
    }

    public function byId($id){
        $sql = "SELECT * FROM users WHERE id='$id'";
       $query = mysqli_query($this->conn,$sql);
       return $query;
   }

   public function delete($id){

	$sql = "DELETE FROM users WHERE id='$id'";
	$query = mysqli_query($this->conn,$sql);
	if($query)
	 	return true;
	else 
		return false;
    }
    
    public function Infor(){

        $sql = "SELECT * FROM users";
        $query = mysqli_query($this->conn, $sql);
        $total = $query->num_rows;

		echo $total;
    }
}

$data = new data();
$data->connection();
?>