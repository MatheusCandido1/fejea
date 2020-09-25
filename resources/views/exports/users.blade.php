<table>
    <thead>
        <tr>
            <th>EJ que indicou</th>
            <th>EJ indicada (1)</th>
            <th>EJ indicada (2)</th>
            <th>EJ indicada (3)</th>
            <th>EJ indicada (4)</th>
            <th>Nome do lead</th>
            <th>Gap do lead</th>
            <th>Informações do lead</th>
            <th>Telefone do lead</th>
            <th>E-mail do lead</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $lead)
        <tr>
            <td>{{$lead->indicou}}</td>
            <td>{{$lead->id_ej1}}</td>
            <td>{{$lead->id_ej2}}</td>
            <td>{{$lead->id_ej3}}</td>
            <td>{{$lead->id_ej4}}</td>
            <td>{{$lead->customer_name}}</td>
            <td>{{$lead->customer_gap}}</td>
            <td>{{$lead->customer_information}}</td>
            <td>{{$lead->customer_phone}}</td>
            <td>{{$lead->customer_email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>