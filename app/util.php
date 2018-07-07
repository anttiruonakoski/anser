<?php

function chunksize($c, $columns)
{
	if ( count($c) / $columns < 6 ) {
		return 6;
	}
	else {
	return ceil(count($c) / $columns);
	}
}