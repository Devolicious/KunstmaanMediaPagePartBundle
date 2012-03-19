KunstmaanMediaPagePartBundle by Kunstmaan
=================================

About
-----
The KunstmaanMediaPagePartBundle for Symfony 2 is part of the bundles we use to build custom and flexible applications at Kunstmaan.
You have to install this bundle in order to be able to add various media pageparts to nodes in the administrator interface.

View screenshots and more on our [github page](http://kunstmaan.github.com/KunstmaanMediaPagePartBundle).

[![Build Status](https://secure.travis-ci.org/Kunstmaan/KunstmaanMediaPagePartBundle.png?branch=master)](http://travis-ci.org/Kunstmaan/KunstmaanMediaPagePartBundle)


Installation requirements
-------------------------
You should be able to get Symfony 2 up and running before you can install the KunstmaanMediaPagePartBundle.

Installation instructions
-------------------------
Installation is straightforward, add the following lines to your deps file:

```
[KunstmaanMediaPagePartBundle]
    git=https://github.com/Kunstmaan/KunstmaanMediaPagePartBundle.git
    target=/bundles/Kunstmaan/MediaPagePartBundle
```

Register the Kunstmaan namespace in your autoload.php file:

```
'Kunstmaan'        => __DIR__.'/../vendor/bundles'
```

Add the KunstmaanMediaPagePartBundle to your AppKernel.php file:

```
new Kunstmaan\MediaPagePartBundle\MediaPagePartBundle(),
```

Contact
-------
Kunstmaan (support@kunstmaan.be)

Download
--------
You can also clone the project with Git by running:

```
$ git clone git://github.com/Kunstmaan/KunstmaanMediaPagePartBundle
```