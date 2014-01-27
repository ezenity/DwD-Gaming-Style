<xen:comment>
    Staff Only = 16
    Founder = 13
    Community Operator = 3
    Community Admin = 12
    Community Moderator = 4
    Wiki Developer = 15
    Retired Staff = 14
    MC Network Operator = 11
    MC Network Developer = 17
    MC Network Admin = 10
    Mc Network Moderator = 9
    RPG Kingdom Owner = 5
    MC Network Vet = 8
    MC Network Elite = 7
    MC Network Trustie = 6
    Community Member = 2
    Guest = 1
</xen:comment>
<xen:if is="{xen:helper ismemberof, $user, 13}">
    <li class="ribbonFounder">
        <div class="left"></div>
        <div class="right"></div>
            Founder
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 3}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Community Operator
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 12}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Community Admin
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 4}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Community Moderator
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 15}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Wiki Developer
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 14}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Retired Staff
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 11}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            MC Network Operator
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 17}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            MC Network Developer
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 10}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            MC Network Admin
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 9}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Mc Network Moderator
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 5}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            RPG Kingdom Owner
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 8}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            MC Network Vet
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 7}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            MC Network Elite
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 6}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            MC Network Trustie
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 2}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Community Member
    </li>
</xen:if>
<xen:if is="{xen:helper ismemberof, $user, 1}">
    <li class="ribbon">
        <div class="left"></div>
        <div class="right"></div>
            Guest
    </li>
</xen:if>