<table class="table is-striped">
	<thead class="has-background-primary">
		<tr class="has-background-primary">
	    	<td class="has-background-primary">Pinnakategoria</td>
            <td class="has-background-primary">Nykyiset pinnat</td>
            <td class="has-background-primary">Päivitetyt pinnat</td>
            <td class="has-background-primary">Uusin laji</td>
            <td class="has-background-primary">Uusimman lajin pvm</td>
	     </tr>
	    </thead>
			<tbody>

			@forelse($listcategorys as $listcategory)

	        <tr>
	            <td>{{ $listcategory->category }}</td>
	            <td>{{ $birder->PointsAmountInCategory($listcategory->id) }}</td>
	            <td>uudet</td>
	            <td>uusin laji</td>
	            <td>uusimman lajin pvm</td>
	        </tr>

			@empty
                <p>Pinnoja ei vielä ole.</p>
            @endforelse

	    </tbody>
</table>