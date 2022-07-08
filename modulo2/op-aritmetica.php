<div class="titulo">Operações Aritmeticas</div>
<?php
/**
 * +$a	Identidade	Conversão de $a para int ou float conforme apropriado.
 * -$a	Negação	Oposto de $a.
 * $a + $b	Adição	Soma de $a e $b.
 * $a - $b	Subtração	Diferença entre $a e $b.
 * $a * $b	Multiplicação	Produto de $a e $b.
 * $a / $b	Divisão	Quociente de $a e $b.
 * $a % $b	Módulo	Resto de $a dividido por $b.
 * $a ** $b	Exponencial	Resultado de $a elevado a $b. Introduzido no PHP 5.6.
 */
echo (5 % 3). '<BR>';           // imprime 2
echo (5 % -3). '<BR>';          // imprime 2
echo (-5 % 3). '<BR>';          // imprime -2
echo (-5 % -3). '<BR>';         // imprime -2

// precedencia
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo $a . '<BR>';
// associação do operador ternário difere do C/C++
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
echo $a . '<BR>';
$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo $a . '<BR>';
?>

<table class="doctable table">
     <caption><strong>Precedência dos operadores</strong></caption>
     
      <thead>
       <tr>
        <th>Associação</th>
        <th>Operadores</th>
        <th>Informação Adicional</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td>não associativo</td>
        <td>
         <code class="literal">clone</code>
         <code class="literal">new</code>
        </td>
        <td><span class="link">clone</span> e <span class="link">new</span></td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">[</code></td>
        <td><span class="function"><span class="function">array()</span></span></td>
       </tr>

       <tr>
        <td>direita</td>
        <td><code class="literal">**</code></td>
        <td><span class="link">aritmética</span></td>
       </tr>

       <tr>
        <td>direita</td>
        <td>
         <code class="literal">++</code>
         <code class="literal">--</code>
         <code class="literal">~</code>
         <code class="literal">(int)</code>
         <code class="literal">(float)</code>
         <code class="literal">(string)</code>
         <code class="literal">(array)</code>
         <code class="literal">(object)</code>
         <code class="literal">(bool)</code>
         <code class="literal">@</code>
        </td>
        <td>
         <span class="link">types</span> e <span class="link">incremento/decremento</span>
        </td>
       </tr>

       <tr>
        <td>não associativo</td>
        <td><code class="literal">instanceof</code></td>
        <td>
         <span class="link">tipos</span>
        </td>
       </tr>

       <tr>
        <td>direita</td>
        <td><code class="literal">!</code></td>
        <td>
         <span class="link">lógicos</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td>
         <code class="literal">*</code>
         <code class="literal">/</code>
         <code class="literal">%</code>
        </td>
        <td>
         <span class="link">aritmética</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td>
         <code class="literal">+</code>
         <code class="literal">-</code>
         <code class="literal">.</code>
        </td>
        <td>
         <span class="link">aritmética</span> e
         <span class="link">string</span></td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td>
         <code class="literal">&lt;&lt;</code>
         <code class="literal">&gt;&gt;</code>
        </td>
        <td>
         <span class="link">bits</span>
        </td>
       </tr>

       <tr>
        <td>não associativo</td>
        <td>
         <code class="literal">&lt;</code>
         <code class="literal">&lt;=</code>
         <code class="literal">&gt;</code>
         <code class="literal">&gt;=</code>
        </td>
        <td>
         <span class="link">comparação</span>
        </td>
       </tr>

       <tr>
        <td>não associativo</td>
        <td>
         <code class="literal">==</code>
         <code class="literal">!=</code>
         <code class="literal">===</code>
         <code class="literal">!==</code>
         <code class="literal">&lt;&gt;</code>
         <code class="literal">&lt;=&gt;</code>
        </td>
        <td>
         <span class="link">comparação</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">&amp;</code></td>
        <td>
         <span class="link">bits</span> e
         <span class="link">referências</span></td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">^</code></td>
        <td>
         <span class="link">bits</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">|</code></td>
        <td>
         <span class="link">bits</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">&amp;&amp;</code></td>
        <td>
         <span class="link">lógicos</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">||</code></td>
        <td>
         <span class="link">lógicos</span>
        </td>
       </tr>

       <tr>
        <td>direita</td>
        <td><code class="literal">??</code></td>
        <td>
         <span class="link">comparação</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">? :</code></td>
        <td>
         <span class="link">ternário</span>
        </td>
       </tr>

       <tr>
        <td>direita</td>
        <td>
         <code class="literal">=</code>
         <code class="literal">+=</code>
         <code class="literal">-=</code>
         <code class="literal">*=</code>
         <code class="literal">**=</code>
         <code class="literal">/=</code>
         <code class="literal">.=</code>
         <code class="literal">%=</code>
         <code class="literal">&amp;=</code>
         <code class="literal">|=</code>
         <code class="literal">^=</code>
         <code class="literal">&lt;&lt;=</code>
         <code class="literal">&gt;&gt;=</code>
        </td>
        <td>
         <span class="link">atribuição</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">and</code></td>
        <td>
         <span class="link">lógicos</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">xor</code></td>
        <td>
         <span class="link">lógicos</span>
        </td>
       </tr>

       <tr>
        <td>esquerda</td>
        <td><code class="literal">or</code></td>
        <td>
         <span class="link">lógicos</span>
        </td>
       </tr>

      </tbody>
     
    </table>
