<?php
    $name = "Juliana Schneider de Souza";
    $age = 23;
    $salary_expectation = 3000.50;
    $description = 'Text text text text text text text text text text Text 
   text text text text text text text text text Text text text text text text text text text 
   text Text text text text text text text text text text';
    $open_to_negotiation = true;
    $skills = ['html', 'vue', 'css', 'javascript'];
    $address = [

        'cep' => '88102300',
        'city' => 'São José',
        'state' => 'Santa Catarina',
        'street' => 'Rua Brasilpinhi',
        'neighborhood' => 'Kobrasol',
        'number' => 510,
        'complement' => 'Ed. Laura'
    ];
    $contacts = (object) [
        'github' => 'http://github.com/jusouza182',
        'phone' => '9999-9999',
        'linkedin ' => 'http://linkedin.com/julianass',
    ];

    $experiences = [
        [
            'company_name' => 'Farm',
            'cargo' => 'Vendedora',
            'period' => '09/2022 - 01/2023',
            'description' => 'Vendedora de loja'
        ],
        [
            'company_name' => 'Exact',
            'cargo' => 'BDR',
            'period' => '03/2023 - atual',
            'description' => 'pré vendedora'
        ]
        ];
        $formacoes = [
            [
                'universidade' => 'UFSC',
                'curso' => 'Física',
                'conclusao' => 'curso trancado',
            ]
            ];
    ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1><?php echo $name ?></h1>
        <p><?php echo "$address[street] - $address[number] - $address[neighborhood]"; ?></p>
        <p><?php echo "$address[cep] - $address[city] - $address[state]"; ?></p>
        <p>Github: <?php echo $contacts->github ?></p>
        <p>Telefone: <?php echo $contacts->phone ?></p>
        <p><?php echo $open_to_negotiation ? 'ACEITO NEGOCIACAO' : 'NAO ABERTO A NEGOCIACAO' ?></p>
    </header>

    <div class="container">
        <h2>Resumo Profissional</h2>
        <p><?php echo $description; ?></p>

        <h2>Experiência Profissional</h2>
        <ul>
            <?php
            foreach ($experiences as $experience) {
            ?>
                <li>
                    <p><strong><?php echo $experience['company_name'] ?></strong></p>
                    <p>Cargo: <?php echo $experience['cargo'] ?></p>
                    <p>Período: <?php echo $experience['period'] ?></p>
                    <p><?php echo $experience['description'] ?>
                    <br/>.</p>
                </li>
            <?php
            }
            ?>
        </ul>

        <h2>Formação Acadêmica</h2>
        <ul> <?php
            foreach ($formacoes as $formacoes) {
            ?>
                <li>
                    <p><strong>Nome da Universidade:<?php echo $formacoes['universidade'] ?></strong></p>
                    <p>Curso: <?php echo $formacoes['curso'] ?></p>
                    <p>Ano de Conclusão:<?php echo $formacoes['conclusao'] ?></p>
                    <br/>.</p>
                </li>
            <?php
            }
            ?>
        </ul>

        <h2>Habilidades Técnicas</h2>
        <ul>
            <?php
            foreach ($skills as $skill) {
                echo "<li>$skill</li>";
            }            ?>
        </ul>

    </div>
</body>

</html>