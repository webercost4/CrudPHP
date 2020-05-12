# CrudPHP

EXEMPLO SELECT -- $new->Crud('SELECT * FROM test','WHERE id = ?', [1]);

EXEMPLO INSERT -- $new->Crud('INSERT INTO test (nome, sobre) VALUES(?, ?)', ['nome', 'sobrenome']);

EXEMPLO UPDATE -- $new->Crud('UPDATE test SET nome = ? WHERE id = ?', ['Nome', 1]);

EXEMPLO DELETE -- $new->Crud('DELETE FROM test WHERE id = ?', [1]);
