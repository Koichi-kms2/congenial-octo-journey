#!/usr/bin/perl

require 'hashfile.pl';

$url = $ENV{"QUERY_STRING"};

$countfname = "gocount.txt";
%count = plab::readhashfile($countfname);
$count{$url} = $count{$url} + 1;
plab::writehashfile($countfname, %count);

print "Content-type: text/html\n\n";