document.addEventListener("DOMContentLoaded", function () {
  const HEADER_HEIGHT = 80;

  const scrollMap = [
    { linkId: "#planLink", targetSection: "schedule_title" },
    { linkId: "#accessLink", targetSection: "access_title" },
    { linkId: "#subscriptionLink", targetSection: "subscription_title" },
  ];

  scrollMap.forEach(({ linkId, targetSection }) => {
    const links = document.querySelectorAll(linkId);
    const sections = document.getElementById(targetSection);
    links.forEach((link) => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        const rect = sections.getBoundingClientRect();
        const offsetTop = window.pageYOffset + rect.top - HEADER_HEIGHT;
        window.scrollTo({ top: offsetTop, behavior: "smooth" });
      });
    });
  });

  const ACCORDION_HEADER_HEIGHT = 200;

  const accordionScrollMap = [
    { linkId: "#accordionPlanLink", targetSection: "schedule_title" },
    { linkId: "#accordionAccessLink", targetSection: "access_title" },
    { linkId: "#accordionSubscriptionLink", targetSection: "subscription_title" },
  ];

  accordionScrollMap.forEach(({ linkId, targetSection }) => {
    const links = document.querySelectorAll(linkId);
    const sections = document.getElementById(targetSection);
    links.forEach((link) => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        const rect = sections.getBoundingClientRect();
        const offsetTop = window.pageYOffset + rect.top - ACCORDION_HEADER_HEIGHT;
        window.scrollTo({ top: offsetTop, behavior: "smooth" });
      });
    });
  });
});
