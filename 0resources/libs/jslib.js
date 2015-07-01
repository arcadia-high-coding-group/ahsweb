function isTrimmed(s)
{
	if(s.length <= 0){ return false;}
	return s.substring(0, 1) != "" && s.substring(s.length - 1, s.length) != " ";
}