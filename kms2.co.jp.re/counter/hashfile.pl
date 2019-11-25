package plab;

sub readhashfile
{
	local %table;
	local $fname;
	local($name, $val);

	$fname = $_[0];

	open FILE, "< $fname";
	while (<FILE>) {
		chomp $_;
		($name, $val) = split('<>', $_);
		if ($name ne "") {
			$table{$name} = $val;
		}
	}

	close FILE;
	return %table;
}


sub writehashfile
{
	local($fname, $n, $i);

	$fname = $_[0];
	$n     = @_;

	open FILE, "> $fname";
	for ($i = 1; $i < $n; $i = $i + 2) {
		print FILE "$_[$i]<>$_[$i+1]\n";
	}
	close FILE;
}

1;